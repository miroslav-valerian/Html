<?php

require __DIR__ . '/../vendor/autoload.php';

$html = (new \Valerian\Html\Html())
    ->addChild(
        (new \Valerian\Html\Body())
            ->addChild(
                $img = (new \Valerian\Html\Img('http://lorempixel.com/400/200/'))
                    ->alt('Lorem Image')
                    ->height(200)
                    ->width(400)
            )->addChild(
                (new \Valerian\Html\Div())
                    ->attribute('class', 'miraDiv')
                    ->addChild(
                        (new \Valerian\Html\Form('#'))
                            ->method('GET')
                            ->attribute('class', 'miraForm')
                            ->addChild(
                                (new \Valerian\Html\Input('text', 'inputMira'))
                                    ->value('Mira')
                                    ->attribute('class', 'miraInput')
                            )
                            ->addChild(
                                (new \Valerian\Html\Select('selectMira'))
                                    ->disabled('disabled')
                                    ->size(2)
                                    ->addOption(
                                        (new \Valerian\Html\SelectOption(1, 'Option 1'))
                                            ->disabled('disabed')
                                    )
                                    ->addOption(
                                        (new \Valerian\Html\SelectOption(2, 'Option 2 Selected'))
                                            ->selected('selected')
                                    )
                                    ->addOption(
                                        new \Valerian\Html\SelectOption(3, 'Option 3')
                                    )
                                    ->addOption(
                                        new \Valerian\Html\SelectOption('', 'Default')
                                    )
                                    ->attribute('class', 'miraSubmit')
                            )
                            ->addChild(
                                (new \Valerian\Html\Input('submit', 'submitMira'))
                                    ->value('Mira')
                                    ->attribute('class', 'miraSubmit')
                            )
                    )
            )
    );

echo (string) $html;
// or use
//echo $html->render();