<!DOCTYPE html>
<html>
  <head>
    <title>Vaccine Records</title>
    <link rel="stylesheet" href="style.css">
      
  </head>
  <body>
    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>New Patient</h1>
        </div>
        <br/>
        <fieldset>
          <legend>Patient Information</legend>
          <div class="item">
            <label for="patFirst"> First Name<span>*</span></label>
            <input id="fnpatFirstame" type="text" name="patFirst" required/>
          </div>
          <div class="item">
            <label for="patLast"> Last Name<span>*</span></label>
            <input id="patLast" type="text" name="patLast" required/>
          </div>
          <div>
            <label for="age">Age<span>*</span></label>
            <input id="age" type="text" name="age" required/>
          </div>
          <div>
          <div class="question">
            <label>Gender</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_1" name="gender"/>
                <label for="radio_1" class="radio"><span>Male</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_2" name="gender"/>
                <label for="radio_2" class="radio"><span>Female</span></label>
              </div>
            </div>
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>Appointment Information</legend>
          <div class="item">
            <label for="date">Date<span>*</span></label>
            <input id="date" type="date" name="date" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="item">
            <p>Center</p>
            <select>
              <option selected value="" disabled selected></option>
              <option value="CVS Pharmacy" >CVS Pharmacy</option>
              <option value="Ontario Clinic">Ontario Clinic</option>
              <option value="Mexico City Clinic">Mexico City Clinic</option>
              <option value="Paris Clinic" >Paris Clinic</option>
              <option value="Great Britain Clinic">Great Britain Clinic</option>
              <option value="Moscow Clinic">Moscow Clinic</option>
              <option value="Beijing Clinic" >Beijing Clinic</option>
              <option value="South Africa Clinic">South Africa Clinic</option>
              <option value="Rio Clinic">Rio Clinic</option>
              <option value="Sydney Clinic" >Sydney Clinic</option>
            </select>
          </div>
          <div class="item">
            <p>Vaccine Manufacturer</p>
            <select>
              <option selected value="" disabled selected></option>
              <option value="Moderna" >Moderna</option>
              <option value="Phizer">Phizer</option>
              <option value="Johnson & Johnson">Johnson & Johnson</option>
            </select>
          </div>
          <div class="question">
            <label>Administrator</label>
            <div class="item">
              <label for="docFirst"> First Name<span>*</span></label>
              <input id="docFirst" type="text" name="docFirst" required/>
            </div>
            <div class="item">
              <label for="docLast"> Last Name<span>*</span></label>
              <input id="docLast" type="text" name="docLast" required/>
            </div>
          </div>
          <div class="question">
            <label>Dosage Number</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_3" name="dosage"/>
                <label for="radio_3" class="radio"><span>1</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_4" name="dosage"/>
                <label for="radio_4" class="radio"><span>2</span></label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>