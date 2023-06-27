
# CRUD Electricity Payment

### Project Description

The "CRUD Electricity Payment" project is a system for managing electricity bill payments. It provides basic CRUD (Create, Read, Update, Delete) functionality to store and manipulate payment data. The system allows users to create new payment records, retrieve and display existing payment records, update payment details, and delete unnecessary payment records.

The project utilizes a MySQL database named "dbplnrpl2" with the following tables:

tbpembayaran: This table stores information about payments, including fields such as KodePembayaran (Payment Code), NoTagihan (Bill Number), JenisPembayaran (Payment Type), NoRek (Bank Account Number), AtasNama (Account Holder's Name), TglTransfer (Transfer Date), Nominal (Amount), Status (Payment Status), KodeTagihan (Bill Code), and UploadBukti (Proof of Payment).

tbtagihan: This table holds data related to bills, including fields such as KodeTagihan (Bill Code), NoTagihan (Bill Number), KodeUser (User Code), KodeTarif (Tariff Code), BulanTagih (Billing Month), TahunTagih (Billing Year), Pemakaian (Electricity Usage), TotalBayar (Total Payment), and Status (Billing Status).

tbtarif: This table contains tariff information, including fields such as KodeTarif (Tariff Code), Daya (Power Capacity), TarifPerKWH (Tariff Per KWh), and Beban (Load).

tbuser: This table stores user data, including fields such as KodeUser (User Code), NoMeter (Meter Number), Username, Password, NamaLengkap (Full Name), Alamat (Address), Telp (Phone Number), Email, Level (User Level), and KodeTarif (Tariff Code).

The project allows users to perform various operations on the payment records stored in the database, such as adding new payments, retrieving payment details, updating payment information, and deleting unnecessary payments.
### Database Information

The project's database is named dbplnrpl2 and consists of the following tables:

tbpembayaran: Stores payment information, including fields such as KodePembayaran (Payment Code), NoTagihan (Bill Number), JenisPembayaran (Payment Type), NoRek (Bank Account Number), AtasNama (Account Holder's Name), TglTransfer (Transfer Date), Nominal (Amount), Status (Payment Status), KodeTagihan (Bill Code), and UploadBukti (Proof of Payment).

tbtagihan: Contains bill information, including fields such as KodeTagihan (Bill Code), NoTagihan (Bill Number), KodeUser (User Code), KodeTarif (Tariff Code), BulanTagih (Billing Month), TahunTagih (Billing Year), Pemakaian (Electricity Usage), TotalBayar (Total Payment), and Status (Billing Status).

tbtarif: Holds tariff data, including fields such as KodeTarif (Tariff Code), Daya (Power Capacity), TarifPerKWH (Tariff Per KWh), and Beban (Load).

tbuser: Stores user information, including fields such as KodeUser (User Code), NoMeter (Meter Number), Username, Password, NamaLengkap (Full Name), Alamat (Address), Telp (Phone Number), Email, Level (User Level), and KodeTarif (Tariff Code).

Each table has a primary key column that uniquely identifies each row of data. Some columns in the tables also have relationships with other tables, such as the KodeUser column in tbtagihan linked to the KodeUser column in tbuser, and the KodeTarif column in tbuser linked to the KodeTarif column in tbtarif.

Using the "CRUD Electricity Payment" application, users can perform CRUD operations on electricity bill payment data, view bill and payment information, and manage user and tariff data.
## Import xampp

dbplnrpl2

