  
<?php  
exec('python test.py', $output, $return_var);  
echo "Output: " . implode("\n", $output) . "\n";  
echo "Return code: " . $return_var . "\n";  
?>  