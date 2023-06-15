<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <title>Student Information</title>
        <style>
          table {
            border-collapse: collapse;
            width: 100%;
          }
          th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
          }
          th {
            background-color: #f2f2f2;
          }
        </style>
      </head>
      <body>
        <h1>Student Information</h1>
        <table>
          <tr>
            <th>USN</th>
            <td><xsl:value-of select="students/student/usn"/></td>
          </tr>
          <tr>
            <th>Name</th>
            <td><xsl:value-of select="students/student/name"/></td>
          </tr>
          <tr>
            <th>College</th>
            <td><xsl:value-of select="students/student/college"/></td>
          </tr>
          <tr>
            <th>Branch</th>
            <td><xsl:value-of select="students/student/branch"/></td>
          </tr>
          <tr>
            <th>Year of Joining</th>
            <td><xsl:value-of select="students/student/year"/></td>
          </tr>
          <tr>
            <th>Email</th>
            <td><xsl:value-of select="students/student/email"/></td>
          </tr>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
