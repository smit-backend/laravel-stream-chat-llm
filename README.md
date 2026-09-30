# StreamLLM: Real-Time Streaming Chat Component

[![GitHub License](https://img.shields.io/github/license/smit-backend/laravel-stream-chat-llm?style=flat-square)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/smit-backend/laravel-stream-chat-llm?style=flat-square)](https://github.com/smit-backend/laravel-stream-chat-llm/stargazers)
[![GitHub Issues](https://img.shields.io/github/issues/smit-backend/laravel-stream-chat-llm?style=flat-square)](https://github.com/smit-backend/laravel-stream-chat-llm/issues)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue?style=flat-square&logo=php)](https://php.net)

> **Real-time SSE event-stream chat component for Laravel Livewire and React, integrated with streaming LLM providers.**

---

## 🚀 Key Highlights & Features

- **Production-Grade Architecture:** Designed specifically with decoupled, testable interfaces.
- **Enterprise Resiliency:** Built-in safeguards, structured exception handling, and observability.
- **Zero-Friction Setup:** Configurable via sensible defaults or deep environment customization.
- **Strictly Typed:** Complete type declarations compatible with PHP 8.2+ and modern standards.

---

## 🛠️ Architecture & Flow

```mermaid
graph TD
    Client[Incoming Request / Trigger] --> Gate[Input Validator & Security Guard]
    Gate --> CoreEngine[StreamLLM: Real-Time Streaming Chat Component]
    CoreEngine --> Adapter[External Storage / Cloud / DB]
    CoreEngine --> Observer[Telemetry & Audit Logger]
```

---

## 📦 Installation & Setup

### Requirements
- **PHP:** `^8.2`
- **Composer:** Modern Composer v2+

### Installation via Composer
```bash
composer require smit-backend/laravel-stream-chat-llm
```

---

## ⚙️ Configuration & Quick Start

Publish configuration and default assets:
```bash
php artisan vendor:publish --tag="laravel-stream-chat-llm-config"
```

Sample configuration excerpt (`config/laravel-stream-chat-llm.php`):
```php
return [
    'enabled' => env('LARAVEL_STREAM_CHAT_LLM_ENABLED', true),
    'log_channel' => env('LARAVEL_STREAM_CHAT_LLM_LOG', 'stack'),
];
```

---

## 🧪 Testing

Run test suites locally:
```bash
composer test
```

---

## 🛡️ Security & Contributing

If you discover any security-related issues, please open an issue or email directly via GitHub. Contributions via pull requests are always welcome!

---

## 📄 License

This package is open-sourced software licensed under the [MIT License](LICENSE).

Developed and maintained with ❤️ by **[smit-backend](https://github.com/smit-backend)**.
