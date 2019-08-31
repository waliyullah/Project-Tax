const members = [
  {
    id: 1,
    name: "Abdulhafiz Ahmed",
    role: "Backend", 
    image: "https://res.cloudinary.com/rexdavinci/image/upload/v1566555418/IMG_20190817_193234.jpg"
  },
  {
    id: 2,
    name: "Rex",
    role: "Backend", 
    image: "https://images.unsplash.com/photo-1567152759562-dc9bbe9a434c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&q=60"
  }
]

function createImage(member){
  let image = document.createElement("img")
  image.setAttribute("src", member.image)
  image.setAttribute("alt", member.name)
  image.setAttribute("width", "120")
  image.setAttribute ("height", "120")
  return image
  }
  
  function generateTeam() {
  let teamMembers = document.getElementById("team-members")
  return members.map(member=>{
    teamMembers.appendChild(createMember(member))
  }) 
}

function createMember(member){
  let divElement = document.createElement("div")
  let nameElement = document.createElement("p")
  let roleElement = document.createElement("p")
  let nameContent = document.createTextNode(member.name)
  let roleContent = document.createTextNode(member.role)
  divElement.className = "member"
  divElement.appendChild(createImage(member))
  nameElement.appendChild(nameContent)
  roleElement.appendChild(roleContent)
  divElement.appendChild(nameElement)
  divElement.appendChild(roleElement)
  return divElement
}
