<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Smoney\Smoney\Facade\AddressFacade;

/**
 * Class UserProfileFacade
 */
class UserProfileFacade
{
    /**
     * @var integer $civility
     * @SerializedName("Civility")
     * @Type("integer")
     */
    public $civility;

    /**
     * @var string $firstName
     * @SerializedName("FirstName")
     * @Type("string")
     */
    public $firstName;

    /**
     * @var string $lastName
     * @SerializedName("LastName")
     * @Type("string")
     */
    public $lastName;

    /**
     * @var DateTime $birthdate
     * @SerializedName("Birthdate")
     * @Type("DateTime")
     */
    public $birthdate;

    /**
     * @var string $phoneNumber
     * @SerializedName("PhoneNumber")
     * @Type("string")
     */
    public $phoneNumber;

    /**
     * @var string $email
     * @SerializedName("Email")
     * @Type("string")
     */
    public $email;

    /**
     * @var string $alias
     * @SerializedName("Alias")
     * @Type("string")
     */
    public $alias;

    /**
     * @var AdresseFacade $address
     * @SerializedName("Address")
     * @Type("Smoney\Smoney\Facade\AddressFacade")
     */
    public $address;

     /**
     * @var PhotoRefFacade $photoRef
     * @SerializedName("Picture")
     * @Type("Smoney\Smoney\Facade\PhotoRefFacade")
     */
    public $photoRef;
}
