# Travel Planner Database

This folder contains the SQL export for the Travel Planner project.

## File

```text
3047travelplannerproj.sql
```

The SQL file includes:

- database creation
- table creation
- existing local data

## Import

Run this command from the project root:

```bash
mysql -u 3047travelplannerproj -p < database/3047travelplannerproj.sql
```

If the database user does not exist on another computer, create the database and user first, then update `config/app_local.php`.

Recommended local database settings:

```text
host: 127.0.0.1
database: 3047travelplannerproj
username: 3047travelplannerproj
password: password
```
