SELECT a.ID, a.post_title, a.post_type, a.post_status, a.post_name
FROM wp_posts AS a
   INNER JOIN (
      SELECT post_title, MIN( id ) AS min_id
      FROM wp_posts
      WHERE post_type = 'post'
      AND post_status = 'publish'
      GROUP BY post_title
      HAVING COUNT( * ) > 1
   ) AS b ON b.post_title = a.post_title
AND b.min_id <> a.id
AND a.post_type = 'post'
AND a.post_status = 'publish'
AND a.post_title <> ''


SELECT ID, post_title, post_name from wp_posts where post_title = '25 Photos That Will Restore Your Faith In Humanity - Part One'


SELECT a.ID, a.post_title, a.post_content, a.post_type, a.post_status, a.post_name
FROM wp_posts AS a
   INNER JOIN (
      SELECT post_title, post_content, MIN( id ) AS min_id
      FROM wp_posts
      WHERE post_type = 'post'
      AND post_status = 'publish'
      GROUP BY post_title
      HAVING COUNT( * ) > 1
   ) AS b ON b.post_title = a.post_title AND b.post_content <> a.post_content
AND b.min_id <> a.id
AND a.post_type = 'post'
AND a.post_status = 'publish'
AND a.post_title <> ''
LIMIT 100



if post_content like 
'%<strong>Original Story:</strong>%' or post_content = ''






DELETE a.*
FROM wp_posts AS a
   INNER JOIN (
      SELECT post_title, MIN( id ) AS min_id
      FROM wp_posts
      WHERE post_type = 'post'
      AND post_status = 'publish'
      GROUP BY post_title
      HAVING COUNT( * ) > 1
   ) AS b ON b.post_title = a.post_title
AND b.min_id <> a.id
AND a.post_type = 'post'
AND a.post_status = 'publish'
AND a.post_title <> ''