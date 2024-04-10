<?php
// 存储不同参数和对应的链接
$links = [
    '1' => 'https://wq4xl3pzfsc.feishu.cn/drive/create/?_tid=a5ece050-f682-11ee-b0c4-5fcc86b792d0&_type=BEAR_CREATE_BY_TEMPLATE_NEW&extraInfo=%257B%257D&from=create_suite_template&searchParams=%257B%257D&teaExtraParams=%257B%257D&teaOption=%257B%2522template_token%2522%253A%2522f9451eaa54f3c4ae4efd0d90b31f66c3957bf071%2522%252C%2522template_name%2522%253A%2522c75a2bed76b22b3e1e6cdc9b2894f22afe87470d%2522%252C%2522template_type%2522%253A%2522ugc%2522%252C%2522module%2522%253A%2522bitable%2522%252C%2522file_type%2522%253A%2522bitable%2522%252C%2522custom_open_source_backup%2522%253A%2522%2522%257D&teaSourceEvent=template_mark_banner&token=InJrb28AKaceRvs1IktcW2M2nFd&type=8&previous_navigation_time=1712675148502',
    '2' => 'https://wq4xl3pzfsc.feishu.cn/drive/create/?_tid=01c63660-f683-11ee-92c6-bfc65ee908ce&_type=BEAR_CREATE_BY_TEMPLATE_NEW&extraInfo=%257B%257D&from=create_suite_template&searchParams=%257B%257D&teaExtraParams=%257B%257D&teaOption=%257B%2522template_token%2522%253A%2522f9451eaa54f3c4ae4efd0d90b31f66c3957bf071%2522%252C%2522template_name%2522%253A%2522c75a2bed76b22b3e1e6cdc9b2894f22afe87470d%2522%252C%2522template_type%2522%253A%2522ugc%2522%252C%2522module%2522%253A%2522bitable%2522%252C%2522file_type%2522%253A%2522bitable%2522%252C%2522custom_open_source_backup%2522%253A%2522%2522%257D&teaSourceEvent=template_mark_banner&token=InJrb28AKaceRvs1IktcW2M2nFd&type=8&previous_navigation_time=1712675302599',
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
