<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompaniesRepository;

/**
 * Companies
 *
 * @ORM\Table(name="companies")
 * @ORM\Entity(repositoryClass=CompaniesRepository::class)
 */
class Companies
{
    /**
     * @var string
     *
     * @ORM\Column(name="company_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="companies_company_id_seq", allocationSize=1, initialValue=1)
     */
    private $companyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_legal_name", type="string", length=255, nullable=true)
     */
    private $companyLegalName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_city", type="string", length=255, nullable=true)
     */
    private $companyCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_state", type="string", length=255, nullable=true)
     */
    private $companyState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_alternative_name", type="string", length=255, nullable=true)
     */
    private $companyAlternativeName;

    /**
     * @var array|null
     *
     * @ORM\Column(name="company_sectors", type="json", nullable=true)
     */
    private $companySectors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_address", type="string", length=255, nullable=true)
     */
    private $companyAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_domain", type="string", length=255, nullable=true)
     */
    private $companyDomain;

    /**
     * @var array|null
     *
     * @ORM\Column(name="company_employees", type="json", nullable=true)
     */
    private $companyEmployees;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_revenue", type="string", length=255, nullable=true)
     */
    private $companyRevenue;

    /**
     * @var array|null
     *
     * @ORM\Column(name="company_social_links", type="json", nullable=true)
     */
    private $companySocialLinks;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_source", type="string", length=255, nullable=true)
     */
    private $companySource;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_capital", type="string", length=255, nullable=true)
     */
    private $companyCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_rccm", type="string", length=255, nullable=true)
     */
    private $companyRccm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_tax_number", type="string", length=255, nullable=true)
     */
    private $companyTaxNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_creation_date", type="date", nullable=true)
     */
    private $companyCreationDate;


}
