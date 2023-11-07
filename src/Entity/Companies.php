<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompaniesRepository;
use App\Entity\Contacts;

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
     * @ORM\Column(name="company_category", type="string", length=10, nullable=true)
     */
    private $companyCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_alternative_name", type="string", length=255, nullable=true)
     */
    private $companyAlternativeName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_desc", type="text", nullable=true)
     */
    private $companyDesc;

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
     * @ORM\Column(name="company_country", type="string", length=255, nullable=true)
     */
    private $companyCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_rccm", type="string", length=255, nullable=true)
     */
    private $companyRccm;

     /**
     * @var string|null
     *
     * @ORM\Column(name="company_legal_form", type="string", length=255, nullable=true)
     */
    private $companyLegalForm;

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

    

    /**
     * Get the value of companyId
     *
     * @return  string
     */ 
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Get the value of companyCreationDate
     *
     * @return  string|null
     */ 
    public function getCompanyCreationDate()
    {
        return $this->companyCreationDate;
    }

    /**
     * Get the value of companyTaxNumber
     *
     * @return  string|null
     */ 
    public function getCompanyTaxNumber()
    {
        return $this->companyTaxNumber;
    }

    /**
     * Get the value of companyRccm
     *
     * @return  string|null
     */ 
    public function getCompanyRccm()
    {
        return $this->companyRccm;
    }

    /**
     * Get the value of companyCapital
     *
     * @return  string|null
     */ 
    public function getCompanyCapital()
    {
        return $this->companyCapital;
    }

    /**
     * Get the value of companySource
     *
     * @return  string|null
     */ 
    public function getCompanySource()
    {
        return $this->companySource;
    }

    /**
     * Get the value of companySocialLinks
     *
     * @return  array|null
     */ 
    public function getCompanySocialLinks()
    {
        return $this->companySocialLinks;
    }

    /**
     * Get the value of companyRevenue
     *
     * @return  string|null
     */ 
    public function getCompanyRevenue()
    {
        return $this->companyRevenue;
    }

    /**
     * Get the value of companyEmployees
     *
     * @return  array|null
     */ 
    public function getCompanyEmployees()
    {
        return $this->companyEmployees;
    }

    /**
     * Get the value of companyDomain
     *
     * @return  string|null
     */ 
    public function getCompanyDomain()
    {
        return $this->companyDomain;
    }

    /**
     * Get the value of companyAddress
     *
     * @return  string|null
     */ 
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * Get the value of companyAlternativeName
     *
     * @return  string|null
     */ 
    public function getCompanyAlternativeName()
    {
        return $this->companyAlternativeName;
    }

    /**
     * Get the value of companySectors
     *
     * @return  array|null
     */ 
    public function getCompanySectors()
    {
        return $this->companySectors;
    }

    /**
     * Get the value of companyLegalName
     *
     * @return  string|null
     */ 
    public function getCompanyLegalName()
    {
        return $this->companyLegalName;
    }

    /**
     * Get the value of companyState
     *
     * @return  string|null
     */ 
    public function getCompanyState()
    {
        return $this->companyState;
    }

    /**
     * Get the value of companyCity
     *
     * @return  string|null
     */ 
    public function getCompanyCity()
    {
        return $this->companyCity;
    }

    /**
     * Get the value of companyCategory
     *
     * @return  string|null
     */ 
    public function getCompanyCategory()
    {
        return $this->companyCategory;
    }

    /**
     * Get the value of companyDesc
     *
     * @return  string|null
     */ 
    public function getCompanyDesc()
    {
        return $this->companyDesc;
    }

    /**
     * Get the value of companyLegalForm
     *
     * @return  string|null
     */ 
    public function getCompanyLegalForm()
    {
        return $this->companyLegalForm;
    }

    /**
     * Get the value of companyCountry
     *
     * @return  string|null
     */ 
    public function getCompanyCountry()
    {
        return $this->companyCountry;
    }
}
