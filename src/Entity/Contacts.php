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
     * @var \Companies
     *
     * @ORM\ManyToOne(targetEntity="Companies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="company_id")
     * })
     */
    private $company;

    public function getId(){
        return $this->contactId;
    }

}
