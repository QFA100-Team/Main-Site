**QFA100 WorldFlight Team Website**

**ToDo**
- DBs to be made
- - Users (Auto Assigned Pilot Access)
    - UID (AutoAssigned)
    - Name
    - DisplayName (Editable by User)
    - Designator (Integer)
    - VATSIM_CID (Integer)
    - Email
    - Password
    - DOB
    - Position (Staff Position)
    - Is Staff (0=no, 1=yes)
    - Access Level (power on site)
SQL::: 

- - Pilots Details 
    - WF2019
    - WF2020
    - WF2021
    - WF2022

- - News ~~~ DONE (Message Josh for SQL Injection Code)
    - Title
    - Author
    - Content
    - Timestamp
    - Type
SQL::: 

**Static Pages**
- Homepage (/home)
- About Us (/about-us)
- Team (/our-team) ~~~ Joshua
  - Dynamic Individual Pages...
- Route (/route)
- Flight Roster (/pilot-roster)
- Account Page (/account)
- News (/news) ~~~ Joshua

**Dynamic Pages**
- Map of User Connections to VATSIM (/map)
- Notifications (/notify)
- Admin Actions (/admin) (will this be needed?)


**Hardest Sections**
- Login Logic
- Access Levels (Admin, Gereral, Pilot, Member)