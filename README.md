**QFA100 WorldFlight Team Website**

**ToDo**
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


**Power Values**
- is_staff 
      - 0=no, 
      - 1=yes
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