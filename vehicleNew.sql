
CREATE TABLE userinfo (
  id int(11) NOT NULL AUTO_INCREMENT,
  email varchar(255) NOT NULL,
  fullName varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  allowedvisitorparking int(11) DEFAULT NULL,
  allowedfixedparking int(11) DEFAULT NULL,
  unitnum_address varchar(45) DEFAULT NULL,
  lastupdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


CREATE TABLE vehiclelogs (
  id int(11) NOT NULL AUTO_INCREMENT,
  plateNumber varchar(255) NOT NULL,
  Date date NOT NULL,
  imagePath varchar(255) DEFAULT NULL,
  timestamp time NOT NULL,
  Authorization varchar(255) DEFAULT NULL,
  isVisitor tinyint(4) DEFAULT NULL,
  visitorname varchar(45) DEFAULT NULL,
  correctednumber varchar(45) DEFAULT NULL,
  gatenum varchar(45) DEFAULT NULL,
  direction int(11) DEFAULT NULL,
  lastupdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  visitorphonenum varchar(45) DEFAULT NULL,
  vehicleid int(11) DEFAULT NULL,
  userid int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

CREATE TABLE vehicleregistration (
  id int(11) NOT NULL AUTO_INCREMENT,
  fullName varchar(255) NOT NULL,
  idType varchar(255) NOT NULL,
  idNumber varchar(255) NOT NULL,
  mobile varchar(255) NOT NULL,
  address text NOT NULL,
  vehicleRegNo varchar(255) NOT NULL,
  userid int(11) DEFAULT NULL,
  lastupdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;