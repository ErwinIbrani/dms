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
  [is_deleted] tinyint DEFAULT ((1)) NOT NULL
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
  [is_deleted] tinyint DEFAULT ((1)) NOT NULL
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
  [is_deleted] tinyint DEFAULT ((1)) NOT NULL
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
  [is_deleted] tinyint DEFAULT ((1)) NOT NULL
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
  [is_deleted] tinyint DEFAULT ((1)) NOT NULL
);