<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dice Entity.
 *
 * @property int $id
 * @property string $incolor
 * @property string $outcolor
 * @property int $face1
 * @property int $face2
 * @property int $face3
 * @property int $costface4
 * @property int $attackface4
 * @property int $deffenseface4
 * @property int $burstface4
 * @property int $costface5
 * @property int $attackface5
 * @property int $deffenseface5
 * @property int $burstface5
 * @property int $costface6
 * @property int $attackface6
 * @property int $deffenseface6
 * @property int $burstface6
 */
class Dice extends Entity
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
