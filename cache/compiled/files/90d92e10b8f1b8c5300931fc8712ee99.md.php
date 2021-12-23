<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/n1d1015/rainydaytabletop.com/user/pages/03.kyrahschronicle/blog_list.md',
    'modified' => 1637810944,
    'data' => [
        'header' => [
            'title' => 'Kyrah\'s Chronicle',
            'published' => true,
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'leading' => 0,
                'columns' => 2,
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'show_date' => false,
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'frontmatter' => 'title: \'Kyrah\'\'s Chronicle\'
published: true
content:
    items:
        - \'@self.children\'
    leading: 0
    columns: 2
    limit: 5
    order:
        by: date
        dir: desc
    show_date: false
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => ''
    ]
];
