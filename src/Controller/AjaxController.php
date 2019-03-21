<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Player;
use App\Entity\Production;
use App\Entity\Resource;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AjaxController extends AbstractController {

    /**
     * @Route("/admin/data", name="admin_data")
     */
    public function addData(Request $request) {
        $id = $request->get('id');
        $megacredit = $this->emptyIntoZero($request->get('megacredit'));
        $iron = $this->emptyIntoZero($request->get('iron'));
        $titan = $this->emptyIntoZero($request->get('titan'));
        $plant = $this->emptyIntoZero($request->get('plant'));
        $energy = $this->emptyIntoZero($request->get('energy'));
        $heat = $this->emptyIntoZero($request->get('heat'));
        $megacreditprod = $this->emptyIntoZero($request->get('megacreditprod'));
        $ironprod = $this->emptyIntoZero($request->get('ironprod'));
        $titanprod = $this->emptyIntoZero($request->get('titanprod'));
        $plantprod = $this->emptyIntoZero($request->get('plantprod'));
        $energyprod = $this->emptyIntoZero($request->get('energyprod'));
        $heatprod = $this->emptyIntoZero($request->get('heatprod'));
        $resourceEntity = $this->addToResource($id, $megacredit, $iron, $titan, $plant, $energy, $heat);
        $productionEntity = $this->addToProduction($id, $megacreditprod, $ironprod, $titanprod, $plantprod, $energyprod, $heatprod);
        return new JsonResponse(array(
            'id' => $id,
            'megacredit' => $resourceEntity->getMegacredit(),
            'iron' => $resourceEntity->getIron(),
            'titan' => $resourceEntity->getTitan(),
            'plant' => $resourceEntity->getPlant(),
            'energy' => $resourceEntity->getEnergy(),
            'heat' => $resourceEntity->getHeat(),
            'megacreditprod' => $productionEntity->getMegacredit(),
            'ironprod' => $productionEntity->getIron(),
            'titanprod' => $productionEntity->getTitan(),
            'plantprod' => $productionEntity->getPlant(),
            'energyprod' => $productionEntity->getEnergy(),
            'heatprod' => $productionEntity->getHeat(),
        ));

    }

    private function addToResource($id, $megacredit, $iron, $titan, $plant, $energy, $heat) {
        $resourceEntity = $this->getDoctrine()->getRepository(Resource::class)->findOneBy(['player' => $id]);
        if ($megacredit !== 0) {
            $currentMegacredit = $resourceEntity->getMegacredit();
            $updateMegacredit = $currentMegacredit + $megacredit;
            $resourceEntity->setMegacredit($updateMegacredit);
            $this->resourceMegacreditMessage($id, $megacredit);
        }
        if ($iron !== 0) {
            $currentIron = $resourceEntity->getIron();
            $updateIron = $currentIron + $iron;
            $resourceEntity->setIron($updateIron);
            $this->resourceIronMessage($id, $iron);
        }
        if ($titan !== 0) {
            $currentTitan = $resourceEntity->getTitan();
            $updateTitan = $currentTitan + $titan;
            $resourceEntity->setTitan($updateTitan);
            $this->resourceTitanMessage($id, $titan);
        }
        if ($plant !== 0) {
            $currentPlant = $resourceEntity->getPlant();
            $updatePlant = $currentPlant + $plant;
            $resourceEntity->setPlant($updatePlant);
            $this->resourcePlantMessage($id, $plant);
        }
        if ($energy !== 0) {
            $currentEnergy = $resourceEntity->getEnergy();
            $updateEnergy = $currentEnergy + $energy;
            $resourceEntity->setEnergy($updateEnergy);
            $this->resourceEnergyMessage($id, $energy);
        }
        if ($heat !== 0) {
            $currentHeat = $resourceEntity->getHeat();
            $updateHeat = $currentHeat + $heat;
            $resourceEntity->setHeat($updateHeat);
            $this->resourceHeatMessage($id, $heat);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($resourceEntity);
        $entityManager->flush();
        return $resourceEntity;
    }

    private function addToProduction($id, $megacredit, $iron, $titan, $plant, $energy, $heat) {
        $productionEntity = $this->getDoctrine()->getRepository(Production::class)->findOneBy(['player' => $id]);
        if ($megacredit !== 0) {
            $currentMegacredit = $productionEntity->getMegacredit();
            $updateMegacredit = $currentMegacredit + $megacredit;
            $productionEntity->setMegacredit($updateMegacredit);
            $this->productionMegacreditMessage($id, $megacredit);
        }
        if ($iron !== 0) {
            $currentIron = $productionEntity->getIron();
            $updateIron = $currentIron + $iron;
            $productionEntity->setIron($updateIron);
            $this->productionIronMessage($id, $iron);
        }
        if ($titan !== 0) {
            $currentTitan = $productionEntity->getTitan();
            $updateTitan = $currentTitan + $titan;
            $productionEntity->setTitan($updateTitan);
            $this->productionTitanMessage($id, $titan);
        }
        if ($plant !== 0) {
            $currentPlant = $productionEntity->getPlant();
            $updatePlant = $currentPlant + $plant;
            $productionEntity->setPlant($updatePlant);
            $this->productionPlantMessage($id, $plant);
        }
        if ($energy !== 0) {
            $currentEnergy = $productionEntity->getEnergy();
            $updateEnergy = $currentEnergy + $energy;
            $productionEntity->setEnergy($updateEnergy);
            $this->productionEnergyMessage($id, $energy);
        }
        if ($heat !== 0) {
            $currentHeat = $productionEntity->getHeat();
            $updateHeat = $currentHeat + $heat;
            $productionEntity->setHeat($updateHeat);
            $this->productionHeatMessage($id, $heat);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($productionEntity);
        $entityManager->flush();
        return $productionEntity;
    }

    private function emptyIntoZero($value) {
        if ($value === '') {
            $value = 0;
        }
        return $value;
    }

    private function resourceMegacreditMessage ($id, $megacredit) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($megacredit > 0) {
            $message = 'Gracz ' . $player . ': liczba megakredytów zwiększona o ' . $megacredit . '.';
        } else {
            $message = 'Gracz ' . $player . ': liczba megakredytów zmniejszona o ' . $megacredit . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function resourceIronMessage ($id, $iron) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($iron > 0) {
            $message = 'Gracz ' . $player . ': liczba żelaza zwiększona o ' . $iron . '.';
        } else {
            $message = 'Gracz ' . $player . ': liczba żelaza zmniejszona o ' . $iron . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function resourceTitanMessage ($id, $titan) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($titan > 0) {
            $message = 'Gracz ' . $player . ': liczba tytanu zwiększona o ' . $titan . '.';
        } else {
            $message = 'Gracz ' . $player . ': liczba tytanu zmniejszona o ' . $titan . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function resourcePlantMessage ($id, $plant) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($plant > 0) {
            $message = 'Gracz ' . $player . ': liczba roślinności zwiększona o ' . $plant . '.';
        } else {
            $message = 'Gracz ' . $player . ': liczba roślinności zmniejszona o ' . $plant . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function resourceEnergyMessage ($id, $energy) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($energy > 0) {
            $message = 'Gracz ' . $player . ': liczba energii zwiększona o ' . $energy . '.';
        } else {
            $message = 'Gracz ' . $player . ': liczba energii zmniejszona o ' . $energy . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function resourceHeatMessage ($id, $heat) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($heat > 0) {
            $message = 'Gracz ' . $player . ': liczba ciepła zwiększona o ' . $heat . '.';
        } else {
            $message = 'Gracz ' . $player . ': liczba ciepła zmniejszona o ' . $heat . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function productionMegacreditMessage ($id, $megacredit) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($megacredit > 0) {
            $message = 'Gracz ' . $player . ': produkcja megakredytów zwiększona o ' . $megacredit . '.';
        } else {
            $message = 'Gracz ' . $player . ': produkcja megakredytów zmniejszona o ' . $megacredit . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function productionIronMessage ($id, $iron) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($iron > 0) {
            $message = 'Gracz ' . $player . ': produkcja żelaza zwiększona o ' . $iron . '.';
        } else {
            $message = 'Gracz ' . $player . ': produkcja żelaza zmniejszona o ' . $iron . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function productionTitanMessage ($id, $titan) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($titan > 0) {
            $message = 'Gracz ' . $player . ': produkcja tytanu zwiększona o ' . $titan . '.';
        } else {
            $message = 'Gracz ' . $player . ': produkcja tytanu zmniejszona o ' . $titan . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function productionPlantMessage ($id, $plant) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($plant > 0) {
            $message = 'Gracz ' . $player . ': produkcja roślinności zwiększona o ' . $plant . '.';
        } else {
            $message = 'Gracz ' . $player . ': produkcja roślinności zmniejszona o ' . $plant . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function productionEnergyMessage ($id, $energy) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($energy > 0) {
            $message = 'Gracz ' . $player . ': produkcja energii zwiększona o ' . $energy . '.';
        } else {
            $message = 'Gracz ' . $player . ': produkcja energii zmniejszona o ' . $energy . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

    private function productionHeatMessage ($id, $heat) {
        $messageEntity = new Message();
        $playerEntity = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['id' => $id]);
        $player = $playerEntity->getName();
        if ($heat > 0) {
            $message = 'Gracz ' . $player . ': produkcja ciepła zwiększona o ' . $heat . '.';
        } else {
            $message = 'Gracz ' . $player . ': produkcja ciepła zmniejszona o ' . $heat . '.';
        }
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }

}