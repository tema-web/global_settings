<?php
rex_sql_table::get(rex::getTable('global_settings_field'))
    ->ensurePrimaryIdColumn()
    ->ensureColumn(new rex_sql_column('title', 'varchar(255)', true, NULL))
    ->ensureColumn(new rex_sql_column('name', 'varchar(255)', true, NULL))
    ->ensureColumn(new rex_sql_column('notice', 'text', true, NULL))
    ->ensureColumn(new rex_sql_column('priority', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('attributes', 'text'))
    ->ensureColumn(new rex_sql_column('type_id', 'int(10) unsigned', true, NULL))
    ->ensureColumn(new rex_sql_column('default', 'varchar(255)'))
    ->ensureColumn(new rex_sql_column('params', 'text', true, NULL))
    ->ensureColumn(new rex_sql_column('validate', 'text', true, NULL))
    ->ensureColumn(new rex_sql_column('callback', 'text', true, NULL))
    ->ensureColumn(new rex_sql_column('restrictions', 'text', true, NULL))
    ->ensureColumn(new rex_sql_column('createuser', 'varchar(255)'))
    ->ensureColumn(new rex_sql_column('createdate', 'datetime'))
    ->ensureColumn(new rex_sql_column('updateuser', 'varchar(255)'))
    ->ensureColumn(new rex_sql_column('updatedate', 'datetime'))
    ->ensureIndex(new rex_sql_index('name', ['name'], rex_sql_index::UNIQUE))
    ->ensure();