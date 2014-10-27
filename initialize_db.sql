insert into archival.groups
  (id, name)
values
  (1, 'admin'),
  (2, 'manager'),
  (3, 'user'),
  (4, 'senior_coder')
  on duplicate key update id=id
