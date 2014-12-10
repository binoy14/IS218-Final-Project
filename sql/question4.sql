<<<<<<< HEAD
SELECT colleges.INSTNM
FROM colleges
JOIN enrol_11 ON colleges.UNITID = enrol_11.UNITID
JOIN fin_11 ON colleges.UNITID = fin_11.UNITID
ORDER BY fin_11.F1A18 / enrol_11.EFYTOTLT DESC 
=======
select colleges.INSTNM from colleges join Fin_11 on Fin_11.UNITID = colleges.UNITID order by Fin_11.F1A18 desc
>>>>>>> 8d4a32e6f765b5598bedda5b5e807fafe29a4383
