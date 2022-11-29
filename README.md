# Laravel 9 清理意外洩露載有資訊安全細節的敏感性資訊

引入 yorcreative 的 laravel-scrubber 套件來清理意外洩露載有資訊安全細節的敏感性資訊，記載資訊安全事項之有關文件或資訊，在提供外界使用及進行經驗交流時，應予適當的限制。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/log/` 來進行敏感性資訊紀錄。

----

## 畫面截圖
![](https://i.imgur.com/PBCRiIk.png)
> 內含機密性或敏感性資料的媒體，應以安全的方式處理
