<?php

namespace ThemeHouse\UserImprovements\Widget;

use ThemeHouse\UserImprovements\XF\Entity\User;
use XF\Widget\AbstractWidget;

class LatestTrophies extends AbstractWidget
{
    protected $defaultOptions = [
        'size' => 5
    ];

    public function render()
    {
        /** @var User $user */
        $user = isset($this->contextParams['user']) ? $this->contextParams['user'] : \XF::visitor();

        $trophies = $user->getTHUILatestTrophies(null, $this->options['size']);

        return $this->renderer('thuserimprovements_widget_latest_trophies', [
            'trophies' => $trophies
        ]);
    }
}
