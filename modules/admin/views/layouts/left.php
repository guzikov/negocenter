<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2'],
                    ['label' => 'Сегменты', 'icon' => 'file-code-o', 'url' => ['/admin/segment']],
                    ['label' => 'Компании', 'icon' => 'dashboard', 'url' => ['/admin/company']],
                ],
            ]
        ) ?>

    </section>

</aside>
