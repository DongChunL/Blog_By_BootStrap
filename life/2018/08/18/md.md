#HTML-\<meta>标签

### \<meta>简介

\<meta>标签提供有关页面的元信息（meta-information），比如针对搜索引擎和更新频度的描述和关键词。\<meta>标签位于文档的头部，不包含任何内容。\<meta>标签的属性定义了与文档相关联的**名称和值对**。



### 相关属性

#### charset

~~~html
    <meta charset="utf-8">
~~~

> 释义：charset属性设置编码格式，设置成utf-8避免出现中文乱码



####content

~~~html
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
~~~

> 释义：\<meta>标签必需的一个属性，依赖于http-equive和name**名称和值对**，存放其内容，值为text



### http-equiv

~~~html
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
~~~

> 释义：http-equiv 属性为**名称/值对**提供了名称。并指示服务器在发送实际的文档之前要先传送给浏览器的 MIME 文档头部包含**名称/值对**。 

| http-euqiv="内容" | 含义                                    | 示例   content="值"                      |
| :---------------- | --------------------------------------- | ---------------------------------------- |
| content-type      | 内容类型                                | text/html，text/css...                   |
| default-style     | 预定义的样式                            | 同一文档下，\<link>或\<style>中的title值 |
| reflash           | 定时刷新或重定向，用户不可控制，慎用    | 正整值                                   |
| X-UA-Compatible   | IE8特有，告诉浏览器用何种IE版本渲染网页 | IE=edge采用IE最新版本渲染网页            |



#### name

~~~html
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="关键字，可从decription中选取">
	<meta name="description" content="描述网页的关键信息">
~~~

> 释义：name属性提供了**名称/值对**的名称，通常由网页制作者自己命名富有意义的名称，便于阅读和理解。

#### 



