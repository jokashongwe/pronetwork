<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="contacts")
 * @ORM\Entity(repositoryClass=ContactsRepository::class)
 */
class Contacts
{
    /**
     * @var string
     *
     * @ORM\Column(name="contact_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="contacts_contact_id_seq", allocationSize=1, initialValue=1)
     */
    private $contactId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_full_name", type="string", length=255, nullable=true)
     */
    private $contactFullName;

    /**
     * @var array|null
     *
     * @ORM\Column(name="contact_phones", type="json", nullable=true)
     */
    private $contactPhones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_email", type="string", length=255, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_role", type="string", length=255, nullable=true)
     */
    private $contactRole;

    /**
     * @var array|null
     *
     * @ORM\Column(name="contact_experiences", type="json", nullable=true)
     */
    private $contactExperiences;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_linkedin_url", type="string", length=255, nullable=true)
     */
    private $contactLinkedinUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_source", type="string", length=255, nullable=true)
     */
    private $contactSource;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_address", type="string", length=255, nullable=true)
     */
    private $contactAddress;

    
    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_facebook_url", type="string", length=255, nullable=true)
     */
    private $contactFacebookUrl;


    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_other_link", type="string", length=255, nullable=true)
     */
    private $contactOtherLink;

    /**
     * @var \Companies
     *
     * @ORM\ManyToOne(targetEntity="Companies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="company_id")
     * })
     */
    private $company;

    public function getContactId(){
        return $this->contactId;
    }

    


    /**
     * Get the value of contactFullName
     *
     * @return  string|null
     */ 
    public function getContactFullName()
    {
        return $this->contactFullName;
    }

    /**
     * Get the value of contactAddress
     *
     * @return  string|null
     */ 
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Get the value of contactSource
     *
     * @return  string|null
     */ 
    public function getContactSource()
    {
        return $this->contactSource;
    }

    /**
     * Get the value of contactEmail
     *
     * @return  string|null
     */ 
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Get the value of contactLinkedinUrl
     *
     * @return  string|null
     */ 
    public function getContactLinkedinUrl()
    {
        return $this->contactLinkedinUrl;
    }

    /**
     * Get the value of contactExperiences
     *
     * @return  array|null
     */ 
    public function getContactExperiences()
    {
        return $this->contactExperiences;
    }

    /**
     * Get the value of contactPhones
     *
     * @return  array|null
     */ 
    public function getContactPhones()
    {
        return $this->contactPhones;
    }

    /**
     * Get the value of contactRole
     *
     * @return  string|null
     */ 
    public function getContactRole()
    {
        return $this->contactRole;
    }

    /**
     * Get the value of company
     *
     * @return  \Companies
     */ 
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Get the value of contactFacebookUrl
     *
     * @return  string|null
     */ 
    public function getContactFacebookUrl()
    {
        return $this->contactFacebookUrl;
    }

    /**
     * Get the value of contactOtherLink
     *
     * @return  string|null
     */ 
    public function getContactOtherLink()
    {
        return $this->contactOtherLink;
    }
}
