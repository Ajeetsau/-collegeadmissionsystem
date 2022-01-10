<?PHP
class Tree
{
public function Tree()
{
echo "Its a User-defined Constructor of the class Tree";
}
function __construct()
{
echo "Its a Pre-defined Constructor of the class Tree";
}
}
$obj= new Tree();
?>