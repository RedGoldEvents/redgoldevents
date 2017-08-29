drop table if exists Useers;
create table if not exists Useers(
uid int not null primary key auto_increment,
uToken text not null,
uMail text not null,
UKey text not null,
UTime time not null,
UDate date not null);

drop table if exists EventsInfo;
create table if not exists EventsInfo(
  eId int not null primary key auto_increment,
  eCreatorId int not null,
  eTitle text not null,
  eVenue text not null,
  eStartTime time not null,
  eStartDate date not null,
  eEndTime time not null,
  eEndDate date not null,
  eDescription text not null,
  eHost text not null,
  eHostInfo text not null,
  eBannerImage text not null,
  eTime time not null,
  eDate date not null);

drop table if exists EventsTicket;
create table if not exists EventsTicket(
eId int not null primary key auto_increment,
eventID int not null,
eTicketPrice text not null,
eTicketImage text not null);

drop table if exists EventsForm;
create table if not exists EventsForm(
eId int not null primary key auto_increment,
eventID int not null,
eText text not null,
eHint text not null);

drop table if exists EventsPublicity;
create table if not exists EventsPublicity(
eId int not null primary key auto_increment,
eventId int not null,
eAudience int not null,
eEventCategory int not null,
eInvite int not null,
eFacebook int not null,
eTwitter int not null,
eInstagram int not null,
eLinkedin int not null,
eTumblr int not null,
eReddit int not null);

drop table if exists EventBill;
create table if not exists EventBill(
eId int not null primary key auto_increment,
eventID int not null,
eBill double not null,
ePaid int not null);

drop table if exists Services;
create table if not exists Services(
sId int not null primary key auto_increment,
sProviderId int not null,
sCategory text not null,
sType text not null,
sTitle text not null,
sDescription text not null,
sPriceMaxRange text not null,
sPriceMinRange text not null,
sAvailable int not null);

drop table if exists Provider;
create table if not exists Provider(
pId int not null primary key auto_increment,
pCategory text not null,
pType text not null,
pProviderTitle text not null,
pProviderLogo text not null,
pProviderDescription text not null,
pProviderNumber text not null,
pProviderMail text not null);

drop table if exists Requests;
create table if not exists Requests(
rId int not null primary key auto_increment,
rUserId int not null,
rServiceId int not null,
rTime time not null,
rDate date not null);

