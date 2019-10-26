###################
Create Vendor:
###################
CREATE TABLE [dbo].[vendor] (
  [id] int  IDENTITY(1,1) NOT NULL,
  [group_name] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [created_by] int NULL,
  [updated_by] int NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL
);

##################
Create User Vendor
##################
CREATE TABLE [dbo].[user_vendor] (
  [id] int  IDENTITY(1,1) NOT NULL,
  [vendor_id] int  NULL,
  [name] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [email] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [phone] varchar(15) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [address] text COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [region_id] int  NULL,
  [province_id] int  NULL,
  [city_id] int  NULL,
  [level] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [created_by] int  NULL,
  [updated_by] int  NULL,
  [created_at] datetime  NULL,
  [updated_at] datetime  NULL,
  [deleted_at] datetime  NULL
)

###################
Create Region:
###################
CREATE TABLE [dbo].[region] (
  [id] int IDENTITY(1,1) NOT NULL,
  [name] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [code] varchar(11) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [char] varchar(11) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL
);

###################
Create Province:
###################
CREATE TABLE [dbo].[province] (
  [id] int IDENTITY(1,1) NOT NULL,
  [region_id] int NULL,
  [name] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [code] varchar(11) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL
);

###################
Create City:
###################
CREATE TABLE [dbo].[city] (
  [id] int IDENTITY(1,1) NOT NULL,
  [province_id] int NULL,
  [name] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [code] varchar(11) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [bsni] varchar(11) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL
);


###################
Create Project:
###################
CREATE TABLE [dbo].[project] (
  [id] int IDENTITY(1,1) NOT NULL,
  [vendor_id] int NOT NULL,
  [wbs_id] varchar(150) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [iro_number] varchar(150) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [project] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [work_group] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [owner_project] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [project_type] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [pic_type] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [tenant] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [sa_type] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [start_date] date NULL,
  [end_date] date NULL,
  [status_planning] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [created_by] varchar(150) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [updated_by] varchar(150) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [company_code] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [spk_number] varchar(150) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [site_id_ibs] varchar(100) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [site_id_tenant] varchar(100) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [site_name] varchar(150) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [site_type] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [tower_height] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [building_height] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [region] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [province_code] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [city_code] varchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [address] TEXT NULL,
  [longitude] TEXT NULL,
  [latitude] TEXT NULL,
  [status] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [flag] int NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL
);



###################
Create document_project:
###################
CREATE TABLE [dbo].[document_project] (
  [id] int IDENTITY(1,1) NOT NULL,
  [project_id] int NOT NULL,
  [vendor_id] int NOT NULL,
  [name] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [code] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [type] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [attachment] TEXT NULL,
  [path] TEXT NULL,
  [approved_id] int NULL,
  [attribute] TEXT NULL,
  [attribute_history] TEXT NULL,
  [status] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [approved_at] datetime NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL
);


###################
Create vendor_project:
###################
CREATE TABLE [dbo].[vendor_project] (
  [id] int IDENTITY(1,1) NOT NULL,
  [project_id] int NOT NULL,
  [vendor_id] int NOT NULL,
  [status] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [created_at] datetime NULL,
);
=======
##################
Create candidate
##################
CREATE TABLE candidate (
    id int NOT NULL IDENTITY(1,1),
    project_id int NOT NULL,
	vendor_id int NOT NULL,
    name varchar(150) NULL,
	long varchar(100) NULL,
	lat varchar(100) NULL,
	address varchar(255) NUll,
    owner_address varchar(255) NUll,
    is_default int NULL DEFAULT 0,
	has_selected int NULL DEFAULT 0,
  PRIMARY KEY(id)
);

============
1. candidate new field owner_address
2. documnet_candidate new field status_revision and delete history_attriute
3. documnet_project new field status_revision and delete history_attriute
4. Delete table pic_project
=============

===========
Create Setting Document
==========
CREATE TABLE [dbo].[document_setting] (
  [id] int IDENTITY(1,1) NOT NULL,
  [document_name] varchar(100) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [group_id] INT NULL,
  [document_type] varchar(100) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL,
);

==========
ALTER TABLE dbo.user_vendor ADD user_id INT NULL;
=========

==========
ALTER TABLE dbo.candidate ADD city varchar(255) NULL;
=========

==========
ALTER TABLE dbo.document_candidate ADD attachment_api text NULL;
=========

==========
Change Table documentSetting column document_role to group_id
=========

===========
Create Document Approval Setting
==========
CREATE TABLE [dbo].[document_approval_setting] (
  [id] int IDENTITY(1,1) NOT NULL,
  [project_id] int NOT NULL,
  [pic_id] int NOT NULL, to user table
  [approval_id] int NOT NULL, to user table
  [document_setting_id] int NOT NULL,
  [layer] int NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
);

===========
Create Document Approval
==========
CREATE TABLE [dbo].[document_approval_history] (
  [id] int IDENTITY(1,1) NOT NULL,
  [project_id] int NOT NULL,
  [document_id] int NOT NULL,
  [approved_id] int NOT NULL,
  [group_id] int NOT NULL,
  [approved_at] datetime NULL,
  [attachment] text NULL,
  [attribute] text NULL,
  [path] text NULL,
  [status_approval] varchar(100) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [note] text NULL,
);

=====
ALTER TABLE [dbo].document_setting ADD step int NULL;
=====