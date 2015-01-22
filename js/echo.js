function echo()
{
    (Array.prototype.slice.call(arguments)).forEach(function(value){
        document.write(value);
        document.write("<br>");
    });
}

echo();
echo('bla');
echo('foo', 'bar', 'baz');
