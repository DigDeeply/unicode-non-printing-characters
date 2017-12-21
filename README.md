# A list for unicode non-printing characters(Unicode�еĲ��ɼ��ַ��б�)

The meaning of "printable/non printable" is less clear in Unicode. Here we talk about is 'General Punctuation', not including 'Control Characters'.    
���ɼ��ַ�û����ȷ�Ķ��壬��������Ĳ��ɼ��ַ�ָ����"ͨ�ñ�����"��Ĳ��ɼ��ַ��������������ַ���

Here is the General Punctuation list:    
[http://www.fileformat.info/info/unicode/block/general_punctuation/utf8test.htm](http://www.fileformat.info/info/unicode/block/general_punctuation/utf8test.htm)

This code has different appearance in different environment. In Mac, It looks like this:    
��Щcode�ڲ�ͬ�Ļ������в�ͬ��չ�֣���MacOS�������:    
![](https://ws1.sinaimg.cn/mw690/6973add9gy1fmo8jkj6l3j21so0zcaf5.jpg)

In Windows, It looks like this:    
![](https://ws1.sinaimg.cn/mw690/6973add9gy1fmo8rva5cdj20wn0hhgn0.jpg)

So, what's non-printing characters, It all depends on you.    

Here is the list `characters.txt`, You cannot 'see' any character with your eyes, but it really exists.   

And here is a demo for php `demo/php.php` to replacement the 'non-printing characters'.    

Also you can use a php regex to replace the Non-printing characters. demo file `demo/demo/preg_replace_all_non-printing.php`    
```php
<?php
$str = preg_replace('/[[:^print:]]/', '', $string);
```

But it will also include \t, \r, \n and so on. See [http://www.pcre.org/pcre.txt](http://www.pcre.org/pcre.txt) , search 'Non-printing characters' for the full list.
