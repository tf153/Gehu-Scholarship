<?php ?>
    <form class="main-form" name="myForm" action="./db/get.php" onsubmit="return validation()" method="post">
      <input type="hidden" name="valid" id="valid" value="1">
      <label for="tenth">10<sup>th</sup> Percentage</label>
      <input type="number" id="tenth" name="tenth" size=5 required>
      <span id="10th"></span><br>

      <label for="twelth">12<sup>th</sup> Percentage</label>
      <input type="number" id="twelth" name="twelth" size=5 required>
      <span id="12th"></span><br>

      <label for="campus">Campus</label>
      <select name="campus" id="campus">
        <option value="bhimtal">Bhimtal</option>
        <option value="haldwani">Haldwani</option>
        <option value="doon_hill">Dehradun(Hill)</option>
        <option value="doon_deem">Dehradun(Deemed)</option>
      </select>
      <br>

      <label for="course">Course</label>
      <select name="course" id="course">
        <option value="btech">B Tech</option>
        <option value="bca">BCA</option>
        <option value="bba">BBA</option>
        <option value="bsc">Bsc Ag</option>
        <option value="mba">MBA</option>
        <option value="mca">MCA</option>
        <option value="mtech">M Tech</option>
      </select>

      <div class="hide" id="btech">
        <label for="branch">Branch</label>
        <select class="branch" name="branch">
          <option value="cs">CS</option>
          <option value="ec">Electronics</option>
          <option value="civil">Civil</option>
          <option value="mech">Mechanical</option>
        </select>
      </div>

      <div class="hide" id="mtech">
        <label for="branch">Branch</label>
        <select class="branch" name="branch">
          <option value="cs">CS</option>
          <option value="ec">Electronics</option>
          <option value="civil">Civil</option>
          <option value="mech">Mechanical</option>
        </select>
      </div>
      <br>
      <label for="sem">select semester</label>
      <input id="sem" type="number" placeholder="1/2/3/4" size="5" name="sem">
      <span id="error_sem"></span>
      <br>
      <div id="prev-sem">

      <!--  <label for="p-sem">Previous sem Result</label>
        <input type="number" required>-->
      </div>

      <br><u><b>
      <span id="choose">Choose other key ingridients for your scholarship</span></b></u>
      <br>
      <input class="inline" type="checkbox" name="gc" id="gc" value="gc">
      <label for="gc">Girl Candidate</label>
      <br>
      <input class="inline" type="checkbox" name="sb" id="sb" value="sb">
      <label for="sb">Siblings</label>
      <br>
      <input class="inline" type="checkbox" name="uk" id="uk" value="uk">
      <label for="uk">Uttarakhkand Domicile</label>
      <br>
      <input class="inline" type="checkbox" name="army" id="army" value="army">
      <label for="army">parents in army</label>
      <br>

      <br>
      <button type="submit">Get Scholarship value</button>
    </form>
    <br>
