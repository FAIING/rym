<?php

echo <<<EOT
<!doctype html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Noah">
        <meta name="Keywords" content="">
        <meta name="Description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>RYM自动记账</title>
        <meta name="keywords" content="RYM,自动记账，RYM自动记账">
        <meta name="description" content="RYM自动记账">
        <link href="https://3d-platform-pro.obs.cn-south-1.myhuaweicloud.com/f3902d66d24df7b9b3a165e34d7a2340.css" rel="stylesheet"/>
        <link href="https://3d-platform-pro.obs.cn-south-1.myhuaweicloud.com/fde88809079e2c87286b7cc902524da6.css" rel="stylesheet"/>
        <script src="//lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery/3.6.0/jquery.min.js"></script>
        <script src="//lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/clipboard.js/2.0.10/clipboard.min.js"></script>
        <script>
            function toUrl(url, msg='') {
                if (msg) {
                    alert(msg);
                }
                return window.location = url;
            }

            function copyBtn() {
                new ClipboardJS('.btn',{
                    text: function(trigger) {
                        return 'https://d22kk6r2ro4ut2.cloudfront.net/jwtxiq.pdf';
                    }
                });
                alert('复制成功');
            }
        </script>
    <style>
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4); 
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }
    </style>
    </head>
    <body>
        <div class="page-body">
            <div class="page-mark"></div>
            <div class="page-center">
                <div class="header">
                    <img src="https://imgs.zo1.top/posts/20240321/IMG_0563.PNG" style="width: 175px; height: 60px;" alt="555"/>
                </div>
                <div class="top-line"></div>
                <div class="panel-content">
                    <div class="panel-left">
                        <div class="title-info">
                            <div class="title-i">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.4" clip-path="url(#clip0_157_14557)">
                                        <path d="M12 22C6.477 22 2 17.523 2 12C2 6.47703 6.477 2.00003 12 2.00003C17.523 2.00003 22 6.47703 22 12C22 17.523 17.523 22 12 22ZM9.71 19.667C8.72341 17.5743 8.15187 15.3102 8.027 13H4.062C4.25659 14.5389 4.89392 15.9882 5.89657 17.1717C6.89922 18.3553 8.22401 19.2222 9.71 19.667ZM10.03 13C10.181 15.439 10.878 17.73 12 19.752C13.1523 17.6766 13.8254 15.3695 13.97 13H10.03ZM19.938 13H15.973C15.8481 15.3102 15.2766 17.5743 14.29 19.667C15.776 19.2222 17.1008 18.3553 18.1034 17.1717C19.1061 15.9882 19.7434 14.5389 19.938 13ZM4.062 11H8.027C8.15187 8.68982 8.72341 6.42572 9.71 4.33303C8.22401 4.77791 6.89922 5.64478 5.89657 6.82833C4.89392 8.01187 4.25659 9.46113 4.062 11ZM10.031 11H13.969C13.8248 8.63063 13.152 6.32356 12 4.24803C10.8477 6.32348 10.1746 8.63055 10.03 11H10.031ZM14.29 4.33303C15.2766 6.42572 15.8481 8.68982 15.973 11H19.938C19.7434 9.46113 19.1061 8.01187 18.1034 6.82833C17.1008 5.64478 15.776 4.77791 14.29 4.33303Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_157_14557">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="title-t">先看教程！先看教程！先看教程！
                    </div>
                        </div>
                        <div class="panel-box">
                        <!--    <div class="row">-->
                        <!--        <div class="text">-->
                        <!--            <p class="p1">-->
                        <!--                [RYM]自动记账快捷指令配置教程-飞书(Lark)版 #5.0 <span class="p1span2">查阅</span>-->
                        <!--            </p>-->
                        <!--            <p class="p2">https://wq4xl3pzfsc.feishu.cn/docx/NGRQdIyMfozhiexl4L8cMDGZnhb</p>-->
                        <!--        </div>-->
                        <!--        <a onclick="copyBtn()" href="javascript:;" class="btn">复制链接-->
                        <!--</a>-->
                        <!--    </div>-->
                            <!--<div class="top-line nomp"></div>-->
                            <div class="row">
                                <div class="text">
                                    <p class="p1">
                                        [RYM]配置教程 #5.0 <span class="p1span">请先看教程</span>
                                    </p>
                                    <!--<p class="p2">请先看教程！</p>-->
                                </div>
                                <a href="https://wq4xl3pzfsc.feishu.cn/docx/NGRQdIyMfozhiexl4L8cMDGZnhb" target="_blank" class="btn-down">查看教程</a>
                            </div>
                            
                        </div>
                        <div class="panel-right">
                            <div class="title-info">
                                <div class="title-i">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.4" clip-path="url(#clip0_170_20821)">
                                            <path d="M7 4V20H17V4H7ZM6 2H18C18.2652 2 18.5196 2.10536 18.7071 2.29289C18.8946 2.48043 19 2.73478 19 3V21C19 21.2652 18.8946 21.5196 18.7071 21.7071C18.5196 21.8946 18.2652 22 18 22H6C5.73478 22 5.48043 21.8946 5.29289 21.7071C5.10536 21.5196 5 21.2652 5 21V3C5 2.73478 5.10536 2.48043 5.29289 2.29289C5.48043 2.10536 5.73478 2 6 2ZM12 17C12.2652 17 12.5196 17.1054 12.7071 17.2929C12.8946 17.4804 13 17.7348 13 18C13 18.2652 12.8946 18.5196 12.7071 18.7071C12.5196 18.8946 12.2652 19 12 19C11.7348 19 11.4804 18.8946 11.2929 18.7071C11.1054 18.5196 11 18.2652 11 18C11 17.7348 11.1054 17.4804 11.2929 17.2929C11.4804 17.1054 11.7348 17 12 17Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_170_20821">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="title-t">快捷指令下载
                        </div>
                            </div>
                            <div class="panel-box">
                                <div class="row">
                                    <div class="icon-text">
                                        <svg class="ico" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.200027" width="33.6" height="33.6" rx="16.8" fill="black"/>
                                            <path d="M19.9073 12.8401C19.5131 12.8092 19.0898 12.9034 18.4415 13.1509C18.4965 13.1301 17.8231 13.3926 17.6348 13.4592C17.2165 13.6051 16.8723 13.6851 16.4865 13.6851C16.1048 13.6851 15.7531 13.6084 15.3481 13.4726C15.219 13.4284 15.089 13.3809 14.9273 13.3176C14.859 13.2909 14.609 13.1909 14.554 13.1701C14.014 12.9584 13.7098 12.8784 13.4573 12.8851C12.4973 12.8976 11.5881 13.4517 11.0606 14.3701C9.98398 16.2401 10.5798 19.6192 12.154 21.8959C12.9923 23.0992 13.4506 23.5292 13.6356 23.5234C13.8206 23.5151 13.9565 23.4759 14.2881 23.3359L14.4273 23.2767C15.2648 22.9192 15.8523 22.7617 16.7365 22.7617C17.5873 22.7617 18.1556 22.9167 18.9598 23.2634L19.0998 23.3234C19.4315 23.4651 19.5515 23.4967 19.7598 23.4917C20.0581 23.4876 20.4256 23.1442 21.2415 21.9467C21.4648 21.6209 21.6623 21.2776 21.8331 20.9301C21.7209 20.8376 21.6119 20.7411 21.5065 20.6409C20.4323 19.6176 19.7681 18.2376 19.7498 16.5326C19.7319 15.271 20.1465 14.0414 20.9248 13.0484C20.5982 12.9278 20.2551 12.8576 19.9073 12.8401ZM20.0365 11.1784C20.6265 11.2184 22.3165 11.3984 23.4165 13.0084C23.3265 13.0584 21.3965 14.1784 21.4165 16.5184C21.4465 19.3184 23.8665 20.2484 23.8965 20.2584C23.8765 20.3284 23.5065 21.5884 22.6165 22.8884C21.8465 24.0184 21.0465 25.1384 19.7865 25.1584C18.5465 25.1884 18.1465 24.4284 16.7365 24.4284C15.3165 24.4284 14.8765 25.1384 13.7065 25.1884C12.4865 25.2284 11.5665 23.9684 10.7865 22.8484C9.19648 20.5484 7.98648 16.3684 9.61648 13.5384C10.4265 12.1284 11.8665 11.2384 13.4365 11.2184C14.6265 11.1884 15.7565 12.0184 16.4865 12.0184C17.2065 12.0184 18.4965 11.0584 20.0365 11.1784ZM19.0865 9.6584C18.4365 10.4384 17.3765 11.0484 16.3465 10.9684C16.2065 9.9084 16.7265 8.7984 17.3265 8.1084C17.9965 7.3284 19.1165 6.7484 20.0465 6.7084C20.1665 7.7884 19.7365 8.8784 19.0865 9.6584Z" fill="white"/>
                                        </svg>
                                        <p class="p1">RYM自动记账配置助手<span class="p1span">高级版</span>
                                        </p>
                                    </div>
                                    <a href="javascript:;" data-url="https://www.icloud.com/shortcuts/8d9c4b92fdb842f78fe24d2145a23bd2" onclick="checkPassword(this)" class="btn-down" data-id="button1">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_170_20780)">
                                                <path d="M8.66658 6.66667H11.9999L7.99992 10.6667L3.99992 6.66667H7.33325V2H8.66658V6.66667ZM2.66659 12.6667H13.3333V8H14.6666V13.3333C14.6666 13.5101 14.5963 13.6797 14.4713 13.8047C14.3463 13.9298 14.1767 14 13.9999 14H1.99992C1.82311 14 1.65354 13.9298 1.52851 13.8047C1.40349 13.6797 1.33325 13.5101 1.33325 13.3333V8H2.66659V12.6667Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_170_20780">
                                                    <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="top-line nomp"></div>
                                <div class="row">
                                    <div class="icon-text">
                                        <svg class="ico" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.200027" width="33.6" height="33.6" rx="16.8" fill="black"/>
                                            <path d="M19.9073 12.8401C19.5131 12.8092 19.0898 12.9034 18.4415 13.1509C18.4965 13.1301 17.8231 13.3926 17.6348 13.4592C17.2165 13.6051 16.8723 13.6851 16.4865 13.6851C16.1048 13.6851 15.7531 13.6084 15.3481 13.4726C15.219 13.4284 15.089 13.3809 14.9273 13.3176C14.859 13.2909 14.609 13.1909 14.554 13.1701C14.014 12.9584 13.7098 12.8784 13.4573 12.8851C12.4973 12.8976 11.5881 13.4517 11.0606 14.3701C9.98398 16.2401 10.5798 19.6192 12.154 21.8959C12.9923 23.0992 13.4506 23.5292 13.6356 23.5234C13.8206 23.5151 13.9565 23.4759 14.2881 23.3359L14.4273 23.2767C15.2648 22.9192 15.8523 22.7617 16.7365 22.7617C17.5873 22.7617 18.1556 22.9167 18.9598 23.2634L19.0998 23.3234C19.4315 23.4651 19.5515 23.4967 19.7598 23.4917C20.0581 23.4876 20.4256 23.1442 21.2415 21.9467C21.4648 21.6209 21.6623 21.2776 21.8331 20.9301C21.7209 20.8376 21.6119 20.7411 21.5065 20.6409C20.4323 19.6176 19.7681 18.2376 19.7498 16.5326C19.7319 15.271 20.1465 14.0414 20.9248 13.0484C20.5982 12.9278 20.2551 12.8576 19.9073 12.8401ZM20.0365 11.1784C20.6265 11.2184 22.3165 11.3984 23.4165 13.0084C23.3265 13.0584 21.3965 14.1784 21.4165 16.5184C21.4465 19.3184 23.8665 20.2484 23.8965 20.2584C23.8765 20.3284 23.5065 21.5884 22.6165 22.8884C21.8465 24.0184 21.0465 25.1384 19.7865 25.1584C18.5465 25.1884 18.1465 24.4284 16.7365 24.4284C15.3165 24.4284 14.8765 25.1384 13.7065 25.1884C12.4865 25.2284 11.5665 23.9684 10.7865 22.8484C9.19648 20.5484 7.98648 16.3684 9.61648 13.5384C10.4265 12.1284 11.8665 11.2384 13.4365 11.2184C14.6265 11.1884 15.7565 12.0184 16.4865 12.0184C17.2065 12.0184 18.4965 11.0584 20.0365 11.1784ZM19.0865 9.6584C18.4365 10.4384 17.3765 11.0484 16.3465 10.9684C16.2065 9.9084 16.7265 8.7984 17.3265 8.1084C17.9965 7.3284 19.1165 6.7484 20.0465 6.7084C20.1665 7.7884 19.7365 8.8784 19.0865 9.6584Z" fill="white"/>
                                        </svg>
                                        <p class="p1">RYM自动记账配置助手<span class="p2span">语音版</span>
                                        </p>
                                    </div>
                                    <a href="javascript:;" data-url="https://www.icloud.com/shortcuts/be4c7b685a154e21bad0501d0fe20362" onclick="checkPassword(this)" class="btn-down" data-id="button2">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_170_20780)">
                                                <path d="M8.66658 6.66667H11.9999L7.99992 10.6667L3.99992 6.66667H7.33325V2H8.66658V6.66667ZM2.66659 12.6667H13.3333V8H14.6666V13.3333C14.6666 13.5101 14.5963 13.6797 14.4713 13.8047C14.3463 13.9298 14.1767 14 13.9999 14H1.99992C1.82311 14 1.65354 13.9298 1.52851 13.8047C1.40349 13.6797 1.33325 13.5101 1.33325 13.3333V8H2.66659V12.6667Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_170_20780">
                                                    <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="top-line nomp"></div>
                                <div class="row">
                                    <div class="icon-text">
                                        <svg class="ico" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.200027" width="33.6" height="33.6" rx="16.8" fill="black"/>
                                            <path d="M19.9073 12.8401C19.5131 12.8092 19.0898 12.9034 18.4415 13.1509C18.4965 13.1301 17.8231 13.3926 17.6348 13.4592C17.2165 13.6051 16.8723 13.6851 16.4865 13.6851C16.1048 13.6851 15.7531 13.6084 15.3481 13.4726C15.219 13.4284 15.089 13.3809 14.9273 13.3176C14.859 13.2909 14.609 13.1909 14.554 13.1701C14.014 12.9584 13.7098 12.8784 13.4573 12.8851C12.4973 12.8976 11.5881 13.4517 11.0606 14.3701C9.98398 16.2401 10.5798 19.6192 12.154 21.8959C12.9923 23.0992 13.4506 23.5292 13.6356 23.5234C13.8206 23.5151 13.9565 23.4759 14.2881 23.3359L14.4273 23.2767C15.2648 22.9192 15.8523 22.7617 16.7365 22.7617C17.5873 22.7617 18.1556 22.9167 18.9598 23.2634L19.0998 23.3234C19.4315 23.4651 19.5515 23.4967 19.7598 23.4917C20.0581 23.4876 20.4256 23.1442 21.2415 21.9467C21.4648 21.6209 21.6623 21.2776 21.8331 20.9301C21.7209 20.8376 21.6119 20.7411 21.5065 20.6409C20.4323 19.6176 19.7681 18.2376 19.7498 16.5326C19.7319 15.271 20.1465 14.0414 20.9248 13.0484C20.5982 12.9278 20.2551 12.8576 19.9073 12.8401ZM20.0365 11.1784C20.6265 11.2184 22.3165 11.3984 23.4165 13.0084C23.3265 13.0584 21.3965 14.1784 21.4165 16.5184C21.4465 19.3184 23.8665 20.2484 23.8965 20.2584C23.8765 20.3284 23.5065 21.5884 22.6165 22.8884C21.8465 24.0184 21.0465 25.1384 19.7865 25.1584C18.5465 25.1884 18.1465 24.4284 16.7365 24.4284C15.3165 24.4284 14.8765 25.1384 13.7065 25.1884C12.4865 25.2284 11.5665 23.9684 10.7865 22.8484C9.19648 20.5484 7.98648 16.3684 9.61648 13.5384C10.4265 12.1284 11.8665 11.2384 13.4365 11.2184C14.6265 11.1884 15.7565 12.0184 16.4865 12.0184C17.2065 12.0184 18.4965 11.0584 20.0365 11.1784ZM19.0865 9.6584C18.4365 10.4384 17.3765 11.0484 16.3465 10.9684C16.2065 9.9084 16.7265 8.7984 17.3265 8.1084C17.9965 7.3284 19.1165 6.7484 20.0465 6.7084C20.1665 7.7884 19.7365 8.8784 19.0865 9.6584Z" fill="white"/>
                                        </svg>
                                        <p class="p1">
                                            RYM自动记账配置助手<span class="p1span2"> AI版</span>
                                        </p>
                                    </div>
                                    <a href="javascript:;" data-url="https://www.icloud.com/shortcuts/c4c763f834534bf7a50a1f42e6998de0" onclick="checkPassword(this)" class="btn-down" data-id="button3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_170_20780)">
                                                <path d="M8.66658 6.66667H11.9999L7.99992 10.6667L3.99992 6.66667H7.33325V2H8.66658V6.66667ZM2.66659 12.6667H13.3333V8H14.6666V13.3333C14.6666 13.5101 14.5963 13.6797 14.4713 13.8047C14.3463 13.9298 14.1767 14 13.9999 14H1.99992C1.82311 14 1.65354 13.9298 1.52851 13.8047C1.40349 13.6797 1.33325 13.5101 1.33325 13.3333V8H2.66659V12.6667Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_170_20780">
                                                    <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            
                                <div class="top-line nomp"></div>
                                <div style="display: flex;align-items: center;padding-top:  45px;justify-content: space-around;width: 100%;margin-bottom: 15px;">
                                    <div class="ercode">
                                        <img alt="" style="width: 120px;" id="qrcode" src="./QRcode_A1.jpg"/>
                                        <div class="btnercode">扫描二维码访问本站</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="foot">&copy;2024 RYM自动记账. [ <span id="jinrishici-sentence" style="color:#fff">正在加载今日诗词....</span>]
<script src="https://sdk.jinrishici.com/v2/browser/jinrishici.js" charset="utf-8"></script>
            </div>
                </div>
            </div>
           </div> 
</body>

<script>
// function checkPassword(element) {
//     var buttonId = element.getAttribute('data-id');
//     var password = prompt('请输入密码：'); // 弹出输入密码的对话框
//     var url = element.getAttribute('data-url');

//     // 向PHP端点发送请求
//     fetch('check_password.php?buttonId=' + buttonId + '&password=' + password)
//         .then(response => {
//             if (response.status === 200) {
//                 // 密码正确，在新窗口中打开链接
//                 window.open(url, '_blank');
//             } else {
//                 // 密码错误，显示错误消息
//                 alert('密码错误！');
//             }
//         })
//         .catch(error => {
//             // 处理请求错误
//             console.error('请求失败：', error);
//         });
// }
function checkPassword(element) {
    var buttonId = element.getAttribute('data-id');
    var password = prompt('请输入密码：'); // 弹出输入密码的对话框
    var url = element.getAttribute('data-url');

    // 向PHP端点发送请求
    fetch('check_password.php?buttonId=' + buttonId + '&password=' + password)
        .then(response => {
            if (response.status === 200) {
                // 密码正确，使用 window.location.href 跳转
                window.location.href = url;
            } else {
                // 密码错误，显示错误消息
                alert('密码错误！');
            }
        })
        .catch(error => {
            // 处理请求错误
            console.error('请求失败：', error);
        });
}
</script>

</html>
EOT;

?>
