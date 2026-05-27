# TOP Y Machinery WordPress Website

仿照 https://www.topymachinery.com/ 制作的WordPress主题

## 项目结构

```
topy-machinery-wp/
├── docker/
│   └── docker-compose.yml    # Docker配置
├── wp-content/
│   └── themes/
│       └── topy-theme/       # 自定义主题
│           ├── assets/       # CSS/JS/图片
│           ├── inc/          # PHP功能模块
│           ├── template-parts/ # 页面模板组件
│           ├── functions.php
│           ├── header.php
│           ├── footer.php
│           └── index.php
└── PROGRESS.md               # 进度跟踪
```

## 快速启动

```bash
cd docker
docker-compose up -d
```

访问 http://localhost:8080 进行WordPress安装

## 主题功能

- ✅ 响应式设计
- ✅ Hero轮播图
- ✅ 产品分类展示
- ✅ 服务流程展示
- ✅ 定制方案区域
- ✅ 公司介绍
- ✅ 客户评价
- ✅ CTA区域
- ✅ 自定义文章类型（产品、方案、评价）
- ✅ 主题设置页面

## 开发进度

见 PROGRESS.md
