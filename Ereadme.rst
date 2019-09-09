###################
Create Vendor Group:
###################
CREATE TABLE [dbo].[group_vendor] (
  [id] int  IDENTITY(1,1) NOT NULL,
  [group_name] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [created_by] int NULL,
  [updated_by] int NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL
);

###################
Create Vendor:
###################
CREATE TABLE [dbo].[vendor] (
  [id] int IDENTITY(1,1) NOT NULL,
  [group_vendor_id] int NULL,
  [name] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [email] varchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [phone] varchar(15) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [address] TEXT NULL,
  [region_id] int NULL,
  [province_id] int NULL,
  [city_id] int NULL,
  [created_by] int NULL,
  [updated_by] int NULL,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL
);

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
  [status] varchar(2) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
  [status] varchar(3) DEFAULT 1,
  [created_at] datetime NULL,
  [updated_at] datetime NULL,
  [deleted_at] datetime NULL
);