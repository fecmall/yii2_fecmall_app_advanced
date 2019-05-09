<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 *
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
    'catalogsearch' => [
        'class' => '\fecshop\app\apphtml5\modules\Catalogsearch\Module',

        'params'=> [
            //'categorysearch_filter_attr' =>[
            //	'color','size',
            //],
            // ����ҳ���title ��ʽ ��%s ���ᱻ�滻��������
            'search_page_title_format' => 'Search Text: %s ',
            // ����ҳ��� meta keywords��ʽ ��%s ���ᱻ�滻��������
            'search_page_meta_keywords_format' => 'Search Text: %s ',
            // ����ҳ��� meta description��ʽ ��%s ���ᱻ�滻��������
            'search_page_meta_description_format' => 'Search Text: %s ',
            // ������������
            'product_search_max_count'  => 1000,
            // ����ҳ���Ƿ������м����
            'search_breadcrumbs'        => true,

            //'search_filter_category' 	=> true,

            'search_query' => [
                // �ŵ���һ���ľ���Ĭ��ֵ��Ʃ�������30
                'numPerPage' => [6],        // ��Ʒ��ʾ�������о�

                // �۸��������ã��������������ҳ��۸���ˣ�������������
                'price_range' => [
                    '0-10',
                    '10-20',
                    '20-30',
                    '30-50',
                    '50-100',
                    '100-150',
                    '150-300',
                    '300-500',
                    '500-1000',
                    '1000-',
                ],
            ],
        ],

    ],
];
