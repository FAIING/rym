<?php
// 存储不同参数和对应的链接
$links = [
    '1' => 'https://wq4xl3pzfsc.feishu.cn/drive/create/?_tid=a5ece050-f682-11ee-b0c4-5fcc86b792d0&_type=BEAR_CREATE_BY_TEMPLATE_NEW&extraInfo=%257B%257D&from=create_suite_template&searchParams=%257B%257D&teaExtraParams=%257B%257D&teaOption=%257B%2522template_token%2522%253A%2522f9451eaa54f3c4ae4efd0d90b31f66c3957bf071%2522%252C%2522template_name%2522%253A%2522c75a2bed76b22b3e1e6cdc9b2894f22afe87470d%2522%252C%2522template_type%2522%253A%2522ugc%2522%252C%2522module%2522%253A%2522bitable%2522%252C%2522file_type%2522%253A%2522bitable%2522%252C%2522custom_open_source_backup%2522%253A%2522%2522%257D&teaSourceEvent=template_mark_banner&token=InJrb28AKaceRvs1IktcW2M2nFd&type=8&previous_navigation_time=1712675148502',
    '2' => 'https://g4o5p23nj86.sg.larksuite.com/drive/create/?_tid=9e902290-01d6-11ef-97ac-591a29f5ff1e&_type=BEAR_COPY_SUITE&confirmTime=1713920676633&createLocation=newTab&createUrlChangeTime=1713920676664&from=create_suite_copy&is_rename=true&mode=1&module=home&needComment=0&needPermission=0&newTabTime=1713920676635&objToken=U19fbB7r0aYWxFsEWy3ljycoguh&objType=8&onlySchema=false&original_module=personal&targetModule=personal&title=RYM%2520%25E8%2587%25AA%25E5%258A%25A8%25E8%25AE%25B0%25E8%25B4%25A6%25E6%25A8%25A1%25E7%2589%2588%2520%25234.0&trigger_location=space_rightclick&urlType=v2&view_title=make_a_copy_to&previous_navigation_time=1713920676665', 
    'link3' => 'https://example.com/page3',
];

// 获取参数
$param = isset($_GET['param']) ? $_GET['param'] : '';

// 检查参数是否在链接数组中
if (array_key_exists($param, $links)) {
    // 如果参数存在于数组中，则执行重定向到相应链接
    header("Location: " . $links[$param]);
    exit();
} else {
    // 如果参数不存在于数组中，则显示默认页面或者给出错误提示
    echo "Invalid parameter or no parameter provided.";
}
?>
