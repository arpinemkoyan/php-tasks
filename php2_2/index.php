<?php

echo "
    <form method='post' action=validation.php>
        <input type='number' placeholder='Enter length of string' name='length'/>
        <select name='contain' >
            <option value='number'>Number</option>
            <option value='letter'>Letter</option>
            <option value='both'>Number & Letter</option>
        </select>
        <input type='submit'  />
    </form>
";

?>