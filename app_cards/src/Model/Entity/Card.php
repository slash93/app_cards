<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Card Entity.
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $text
 * @property int $cost
 * @property int $energy_type
 * @property int $max
 * @property int $die_id
 * @property \App\Model\Entity\Dy $dy
 * @property int $set_id
 * @property \App\Model\Entity\Set $set
 * @property int $collector_number
 * @property string $rarity
 * @property int $global_id
 * @property \App\Model\Entity\Global $global
 * @property int $image_id
 * @property \App\Model\Entity\Image $image
 * @property int $affiliation_id
 * @property \App\Model\Entity\Affiliation $affiliation
 * @property string $alliangment
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Inventory[] $inventories
 * @property \App\Model\Entity\TeamCard[] $team_cards
 */
class Card extends Entity
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
