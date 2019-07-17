<!DOCTYPE html>
<html>

<head>
    <title>registration form</title>
</head>

<body>

    <h1><u>REGISTRATION FORM</u></h1>
    <form action="form1.php" method="get">
        FULL NAME:
        <input type="text" name=" FULL NAME" placeholder="full name"><br><br>
        MOTHER'S NAME:<input type="text" name=" MOTHER'S NAME" placeholder="mother's name"><br><br>
        FATHER'S NAME:<input type="text" name=" FATHER'S NAME" placeholder="father's name"><br><br>
        EMAIL:<input type="email" name=" email" placeholder="mail id"><br><br>
        CONTACT NO:<input type="number" name=" number" placeholder="contact"><br><br>
        COURSE:
        <select>
            <option>BTECH</option>
            <option>BCOM</option>
            <option>BBA</option>
            <option>LLB</option>
            <option>MBA</option>
        </select>
        BRANCH:
        <select>
            <option>CSE</option>
            <option>EE</option>
            <option>ECE</option>
            <option>CE</option>
            <option>ME</option>
        </select><br><br>
        CATEGORY:<input type="radio" name="General" value="General" checked> General<input type="radio" name="OBC"
            value="OBC"> OBC
        <input type="radio" name="ST" value="ST"> ST <input type="radio" name="SC" value="SC">
        SC<br><br>
        GENDER:<input type="radio" name="male" value="male" checked> male<input type="radio" name="female"
            value="female"> female<br><br>
        EDUCATIONAL QUALIFICATION: <br><br>
        %age in 10:<input type="number" name="percentage "><br><br>
        %age in 10+2:<input type="number" name="percentage "><br><br>
        ARE YOU A DROP OUT STUDENT?
        <input type="radio" name="yes" value="yes"> Yes<input type="radio" name="no" value="No" checked>No<br><br>
        <button>submit</button><br><br>


    </form>
</body>

</html>