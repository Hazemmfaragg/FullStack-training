/*Task1*/
CREATE VIEW task1 AS
SELECT c.title, COUNT(e.student_id) AS total
 FROM courses c
 LEFT JOIN enrollments e ON c.id = e.course_id
 GROUP BY c.id
/*   task2   */
CREATE VIEW task2 AS
 SELECT name FROM students
 WHERE id = (
 SELECT student_id FROM enrollments
 GROUP BY student_id
 ORDER BY COUNT(student_id) ASC
 LIMIT 1
 );
 /*task3*/
 CREATE VIEW task3 AS
  SELECT name FROM students
 WHERE id NOT IN (
 SELECT student_id FROM enrollments
 GROUP BY student_id
 HAVING COUNT(*) > 1
 );
 /*task4*/
 CREATE VIEW task4 AS
 SELECT students.name, COUNT(enrollments.course_id) AS course_count
FROM students
JOIN enrollments ON students.id = enrollments.student_id
GROUP BY  students.name;

/*training*/
SELECT c.title, COUNT(e.student_id) AS total
FROM courses c
LEFT JOIN enrollments e ON c.id = e.course_id
GROUP BY c.title
ORDER BY total DESC

/*sadsad task3 corrected*/
 SELECT s.name
 FROM students s
 LEFT JOIN enrollments e ON s.id = e.student_id
    WHERE e.course_id IS NULL