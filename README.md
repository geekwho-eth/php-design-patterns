# PHP 设计模式代码示例

本仓库是一个学习和实践 PHP 设计模式的项目，包含经典设计模式的代码实现、应用场景和单元测试，旨在帮助开发者深入理解设计模式的核心思想，并将其应用到实际开发中。

---

## 项目介绍

设计模式是软件开发中解决常见问题的通用解决方案。通过学习设计模式，开发者可以编写出更高效、可维护、可扩展的代码。本项目基于 PHP 实现了经典的 GoF 设计模式，并结合实际场景提供了代码示例和单元测试。

---

## 目录结构

```
php-design-patterns/
├── src/DesignPattern/         # 设计模式的代码实现
│   ├── Proxy/                 # 代理模式
│   ├── Iterator/              # 迭代器模式
│   └── ...                    # 其他设计模式
├── tests/src/                 # 单元测试代码
│   ├── ProxyTest.php          # 代理模式的单元测试
│   ├── IteratorTest.php       # 迭代器模式的单元测试
│   └── ...                    # 其他模式的单元测试
├── README.md                  # 项目说明文档
└── composer.json              # PHP 依赖管理文件
```

---

## 设计模式列表

本仓库实现了以下经典设计模式：

### 创建型模式 (Creational Patterns)
- 工厂模式 (Factory Pattern)
- 单例模式 (Singleton Pattern)
- 建造者模式 (Builder Pattern)

### 结构型模式 (Structural Patterns)
- 代理模式 (Proxy Pattern)
- 装饰器模式 (Decorator Pattern)
- 适配器模式 (Adapter Pattern)

### 行为型模式 (Behavioral Patterns)
- 迭代器模式 (Iterator Pattern)
- 策略模式 (Strategy Pattern)
- 观察者模式 (Observer Pattern)

每种模式都包含以下内容：
- 模式简介与应用场景
- PHP 代码实现
- 单元测试示例

---

## 单元测试

本项目使用 PHPUnit 进行单元测试。测试代码位于 `tests/src/` 目录下，每个设计模式对应一个测试文件。

---

## 使用方法

1. 克隆本仓库到本地：
   ```bash
   git clone https://github.com/geekwho-eth/php-design-patterns.git
   cd php-design-patterns
   ```

2. 安装依赖：
   ```bash
   composer install
   
   # 确保已安装 PHPUnit：
   vendor/bin/phpunit -h
   ```

3. 按照目录结构浏览代码，学习不同设计模式的实现。运行单元测试验证代码功能。

   ```shell
   # 运行测试
   ./scripts/run_test.sh
   ```

   示例输出

   ```shell
   PHPUnit 12.0.0 by Sebastian Bergmann and contributors.
   
   Runtime:       PHP 8.4.7
   Configuration: /php-design-patterns/tests/phpunit.xml
   
   ...............................................                   47 / 47 (100%)
   
   Time: 00:00.045, Memory: 10.00 MB
   
   OK (47 tests, 90 assertions)
   ```

   

---

## 贡献指南

欢迎通过以下方式为本仓库贡献内容：

- 提出 Issue 报告错误或建议改进
- 提交 Pull Request 添加代码示例或优化现有代码
- 分享您的学习心得

---

## 许可证

本仓库采用 MIT License 许可证，您可以自由使用和分发。