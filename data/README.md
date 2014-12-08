## Question Headers
1. INSTNM, EFYTOTLT
2. INSTNM, F1A13
3. INSTNM, F1A18
4. INSTNM, F1A18 / EFYTOTLT
5. INSTNM, ( EFYTOTLT in 2010 / EFYTOTLT in 2011 ) * 100

## Database Tables

1. Colleges = hd2011
2. Enrollment = effy2010,2011
3. Financial = f0910_f1a, f1011_f1a

## SQL Queries

1. $sql = 'SELECT Colleges.INSTNM, EFYTOTLT 
		   FROM Enrollment, Colleges
		   WHERE Enrollment.UNITID = Colleges.UNITID
		   ORDER BY EFYTOTLT DESC 
		   LIMIT 25';

	$query = $dbh->prepare($sql, array(PDO::ATR_CURSOR => PDO::CURSOR_FWDONLY));
	$query->execute();
	$results = $query->fetchAll();


2. $sql = 'SELECT Colleges.INSTNM, Finacial.F1A13
		   FROM Colleges, Financial
		   WHERE Colleges.UNITID = Fiancial.UNITID
		   ORDER BY F1A13 DESC
		   LIMIT 25';
	
	$query = $dbh->prepare($sql, array(PDO::ATR_CURSOR => PDO::CURSOR_FWDONLY));
	$query->execute();
	$results = $query->fetchAll();


3.  $sql = 'SELECT Colleges.INSTNM, Financial.F1A18
			FROM Colleges, Financial
			WHERE Colleges.UNITID = Financial.UNITID
			ORDER BY F1A18 DESC
			LIMIT 25';

	$query = $dbh->prepare($sql, array(PDO::ATR_CURSOR => PDO::CURSOR_FWDONLY));
	$query->execute();
	$results = $query->fetchAll();


4. $sql = 'SELECT Colleges.INSTNM, Financial.F1A18 / Enrollment.EFYTOTLT
		   FROM Colleges, Financial, Enrollment
		   WHERE Financial.UNITID = Enrollment.UNITID
		   ORDER BY (Financial.F1A18/Enrollment.EFYTOTLT) DESC
		   LIMIT 25';


	$query = $dbh->prepare($sql, array(PDO::ATR_CURSOR => PDO::CURSOR_FWDONLY));
	$query->execute();
	$results = $query->fetchAll();


5. 