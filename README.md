# VisualEditor

这里是Mediawiki插件所见即所得编辑器（VisualEditor）的修改版。本修改版诣在
使VisualEditor支持直接安装在Mediawiki。大致更改：

- 移除RestAPI需求，可以直接安装于Mediawiki而无需再配置RestAPI
- 适配1.27版本Mediawiki
- 细节变更

就做了点微小的工作，很惭愧。

## 适配版本

Mediawiki 1.27.*
PHP 4.3+

## 安装

于release处下载或者直接clone下载并使用`git submodule update --init`安装依
赖。下载后，将文件解压至wiki目录的extensions文件夹。然后在wiki根目录下的
`LocalSettings.php`文件后添加：

```php
require_once "$IP/extensions/VisualEditor/VisualEditor.php";
$wgDefaultUserOptions['visualeditor-enable'] = 1;
$wgHiddenPrefs[] = 'visualeditor-enable';

// 可选: 开启VisualEditor实验特性
// 注：当然咱还没有测试过……有问题欢迎issue
#$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;
```

---
Origin:

VisualEditor provides a visual editor for wiki pages. It is written in
JavaScript and runs in a web browser.

It uses the Parsoid parser to convert wikitext documents to annotated HTML
which the VisualEditor is able to load, modify and emit back to Parsoid at
which point it is converted back into wikitext.

For more information about these projects, check out the [VisualEditor][]
and [Parsoid][] pages on mediawiki.


## Developing and installing

For information on installing VisualEditor on a local wiki, please
see https://www.mediawiki.org/wiki/Extension:VisualEditor

For information about running tests and contributing code to VisualEditor,
see [CONTRIBUTING.md](./CONTRIBUTING.md).  Patch submissions are reviewed and managed with
[Gerrit][].  There is also [API documentation][] available for the
VisualEditor.

[VisualEditor]:      https://www.mediawiki.org/wiki/VisualEditor
[Parsoid]:           https://www.mediawiki.org/wiki/Parsoid
[API documentation]: https://doc.wikimedia.org/VisualEditor/master/
[Gerrit]:            https://www.mediawiki.org/wiki/Gerrit
