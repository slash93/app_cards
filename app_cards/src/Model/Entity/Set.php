<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Set Entity.
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $date
 * @property int $size
 * @property string $legallity
 * @property int $image_id
 * @property \App\Model\Entity\Image $image
 * @property string $brand
 * @property \App\Model\Entity\Card[] $cards
 */
class Set extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
