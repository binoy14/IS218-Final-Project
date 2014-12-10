SELECT colleges.INSTNM
FROM colleges
JOIN enrol_10 ON colleges.UNITID = enrol_10.UNITID
JOIN enrol_11 ON colleges.UNITID = enrol_11.UNITID
ORDER BY (
enrol_10.EFYTOTLT / enrol_11.EFYTOTLT
) *100 DESC 