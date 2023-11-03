<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sectors
 *
 * @ORM\Table(name="sectors")
 * @ORM\Entity
 */
class Sectors
{
    /**
     * @var string
     *
     * @ORM\Column(name="sector_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sectors_sector_id_seq", allocationSize=1, initialValue=1)
     */
    private $sectorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sector_name", type="string", length=100, nullable=true)
     */
    private $sectorName;


}
