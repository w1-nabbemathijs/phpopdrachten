<?php
/**
 * User: Mathijs Nabbe
 * Date: 29-03-2020
 * Time: 15:24
 * File: opdracht5.3.php
 */
?>

<?php include "../../../Includes/header.php"; ?>
<?php
echo "<style> 
label {
    width: 20em;
    display: inline-block;    
}
</style>";

echo "<h2>Opdracht 5.3</h2>";
echo "
         
            <form action='opdracht5.3B.php'>
            <fieldset>
            <legend>Registratieformulier</legend>
	        <div><label>Naam: </label><input name='naam' id='naam' type='text' value=''>
            </div><div>
            </div><div><label>Geslacht:</label><span>M</span>
            <input type='radio' name='geslacht' value='M'>&nbsp;<span>V</span><input type='radio' name='geslacht' value='V'>
            
            </div><div><label>Leeftijdscategorie:</label>
            <select name='leeftijdscategorie'>
                    <option value='-1'>Selecteer leeftijdsgroep</option>
                    <option value='1'>&lt;18</option>
                    <option value='2'>18 - 25</option>
                    <option value='3'>26 - 40</option>
                    <option value='4'>&gt;41</option>
            </select>            
           
	        </div><div><label>Email: </label><input name='email' type='text' value=''>
            
            </div><div><label>Interessegebieden?</label>
                IT<input type='checkbox' name='it' value='1'>
                &nbsp;Games<input type='checkbox' name='games' value='1'>
                &nbsp;Anime<input type='checkbox' name='anime' value='1'>
	        </div></fieldset>
	        <div>
	        <input type='submit' value='verzend' name='verzend'>
	        <input type='reset' value='reset' name='reset'>
            </div>
            </form>       
";

?>
<?php include "../../../Includes/footer.php"; ?>
