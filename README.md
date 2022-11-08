**QFA100 WorldFlight Team Website**

**ToDo**
- DBs to be made
- - Users (Auto Assigned Pilot Access)
    - user_uid (AutoAssigned)
    - Name
    - DisplayName (Editable by User)
    - VATSIM_CID (Integer)
    - Email
    - Password
    - dob
    - is_staff (0=no, 1=yes)
    - staff_pos (Staff Position)
    - power_access (power on site)
SQL::: 

- - Pilots Details 
    - WF2019
    - WF2020
    - WF2021
    - WF2022

- - News ~~~ DONE (Message Josh for SQL Injection Code)
    - id {unique}
    - title
    - news_type
    - author
    - author_UID
    - content
    - created_at
SQL::: 

**Static Pages**
- Homepage (/home)
- About Us (/about-us)
- Route (/route)

**Controller Pages (Multiple Pages in one catagory)**
- News (/news) ~~~ Josh
  - /{id} shows specific news article
  - /create makes new news article
  - /{id}/edit edits specific news article (button only available to admins).
- Our Team (/our-team) ~~~ Josh
  - /{id} shows specific member
- Flight Roster (/pilot-roster)
- - /{id} Flight Number Details
- Account (/account)

**Dynamic Pages**
- Map of User Connections to VATSIM (/map)
- Notifications (/notify)
- Admin Actions (/admin) (will this be needed?)


**Hardest Sections**
- Login Logic
- Access Levels (Admin, Gereral, Pilot, Member)
