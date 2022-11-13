**QFA100 WorldFlight Team Website**

**ToDo**
- DBs to be made
- - Users
    - user_uid (AutoAssigned)
    - Name
    - display_name (Editable by User)
    - vatsim_cid (Integer)
    - Email
    - Password
    - dob
    - is_staff (0=no, 1=yes)
    - staff_pos (Staff Position) 
      - 0=member, 
      - 1=marketing, 
      - 2=operations, 
      - 3=tech, 
      - 4=founder, 
      - 5=Executive Director,
    - power_access (power on site) 
      - 0=member, 
      - 1=pilot, 
      - 2, marketing, 
      - 3=operations, 
      - 4=tech, 
      - 5=admin

- - Staff
    - id
    - u_id
    - position
    - power
    - title
    - description
    - marketing_dep
    - ops_dep
    - tech_dep

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
